document.addEventListener("DOMContentLoaded", function () {
    // Fetch scenarios data and populate the table
    fetchScenarios();
});

function fetchScenarios() {
    // Assume scenariosData is an array of objects retrieved from your database
    const scenariosData = [
        { id: 1, name: "Scenario 1" },
        { id: 2, name: "Scenario 2" },
        // Add more scenarios as needed
    ];

    const tableBody = document.querySelector("#scenariosTable tbody");

    scenariosData.forEach((scenario) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${scenario.id}</td>
            <td>${scenario.name}</td>
            <td><button onclick="editScenario(${scenario.id})">View</button></td>
        `;
        tableBody.appendChild(row);
    });
}

function editScenario(scenarioId) {
    // Handle the edit scenario action based on the scenarioId
    console.log(`Editing scenario with ID: ${scenarioId}`);
    // Redirect or perform other actions as needed
}
