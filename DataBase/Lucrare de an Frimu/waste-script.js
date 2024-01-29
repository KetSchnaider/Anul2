document.addEventListener("DOMContentLoaded", function () {
    fetchYears();
    fetchZones();
    fetchCategories();

    document.getElementById("apply-button").addEventListener("click", function () {
        if (areAllFiltersSelected()) {
            applyFilters();
        } else {
            alert("Please select all three filters: Year, Category, Zone(s).");
        }
    });

    if (typeof Chart !== 'undefined') {
        initializeOrUpdateChart();
    }
});

function areAllFiltersSelected() {
    const selectedYear = document.getElementById("year-dropdown").value;
    const selectedCategory = document.getElementById("category-dropdown").value;
    const selectedZones = Array.from(document.getElementById("zone-dropdown").selectedOptions).map(option => option.value);

    return selectedYear !== "" && selectedCategory !== "" && selectedZones.length > 0;
}

function fetchYears() {
    const yearDropdown = document.getElementById("year-dropdown");
    fetchData("get_years.php", yearDropdown, "Select the year");
}

function fetchZones() {
    const zoneDropdown = document.getElementById("zone-dropdown");
    fetchData("get_zones.php", zoneDropdown, "Select the zone(s)");
}

function fetchCategories() {
    const categoryDropdown = document.getElementById("category-dropdown");
    fetchData("get_waste_categories.php", categoryDropdown, "Select the category");
}

function fetchData(url, dropdown, defaultOptionText) {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                let data;

                try {
                    data = JSON.parse(xhr.responseText);
                } catch (error) {
                    data = xhr.responseText;
                }

                addOptionsToDropdown(data, dropdown, defaultOptionText);
            } else {
                console.error("Request failed with status:", xhr.status);
            }
        }
    };

    xhr.send();
}

function addOptionsToDropdown(options, dropdown, defaultOptionText) {
    const defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.text = defaultOptionText;
    dropdown.add(defaultOption);

    options.forEach(function (option) {
        const cleanedOption = option.replace(/"/g, "").trim();

        if (cleanedOption !== "") {
            const dropdownOption = document.createElement("option");
            dropdownOption.value = cleanedOption;
            dropdownOption.text = cleanedOption;
            dropdown.add(dropdownOption);
        }
    });
}

function applyFilters() {
    initializeOrUpdateChart();
}

function initializeOrUpdateChart() {
    const selectedYear = document.getElementById("year-dropdown").value;
    const selectedCategory = document.getElementById("category-dropdown").value;
    const selectedZones = Array.from(document.getElementById("zone-dropdown").selectedOptions).map(option => option.value);

    if (selectedYear !== "" && selectedCategory !== "") {
        const xhr = new XMLHttpRequest();
const url = `get_waste_chart_data.php?year=${selectedYear}&category_name=${selectedCategory}&zones=${selectedZones.join(',')}`;
        xhr.open("GET", url, true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);

                if (data.message) {
                    displayAlert(data.message);
                } else {
                    updateChart(data, selectedCategory); 
                }
            }
        };

        xhr.send();
    } else {
        clearChart();
    }
}

function displayAlert(message) {
    alert(message);
}

function clearChart() {
    const chartContainer = document.getElementById("chart-container");
    const existingChart = Chart.getChart(chartContainer);

    if (existingChart) {
        existingChart.destroy();
    }
}

function createEmptyChart() {
    const chartContainer = document.getElementById("chart-container");
    const ctx = chartContainer.getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: [],
            datasets: [
                {
                    label: "", 
                    data: [],
                    backgroundColor: "rgba(75, 192, 192, 0.2)",
                    borderColor: "rgba(75, 192, 192, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
}

function updateChart(data, selectedCategory) {
    const ctx = document.getElementById("chart-container").getContext("2d");
    const totalAmountContainer = document.getElementById("total-amount-container");

    if (window.myChart) {
        window.myChart.data.labels = data.labels;
        window.myChart.data.datasets[0].data = data.values;
        window.myChart.data.datasets[0].label = selectedCategory; 
        window.myChart.update();
    } else {
        window.myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: data.labels,
                datasets: [
                    {
                        label: selectedCategory,
                        data: data.values,
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        borderColor: "rgba(75, 192, 192, 1)",
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    }

    totalAmountContainer.textContent = `Total Amount: ${data.totalAmount}`;
}
