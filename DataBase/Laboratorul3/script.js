let currentPart = 1;

function toggleStoryPart(direction) {
    if (direction === 'prev' && currentPart > 1) {
        currentPart--;
    } else if (direction === 'next' && currentPart < 3) {
        currentPart++;
    }

    document.getElementById('part1').style.display = currentPart === 1 ? 'block' : 'none';
    document.getElementById('part2').style.display = currentPart === 2 ? 'block' : 'none';
    document.getElementById('part3').style.display = currentPart === 3 ? 'block' : 'none';

    document.getElementById('prevButton').style.display = currentPart > 1 ? 'block' : 'none';
    document.getElementById('nextButton').style.display = currentPart < 3 ? 'block' : 'none';
}
