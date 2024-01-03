(async () => {
    try {
        const response = await fetch("api/allData.php");
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();
		
        const courseTableBody = document.getElementById("courseTableBody");

        data.forEach(course => {
            const row = document.createElement("tr");

            const titleCell = document.createElement("td");
            titleCell.textContent = course.courseTitle;

            const typeCell = document.createElement("td");
            typeCell.textContent= course.courseSubject;

            const summaryCell = document.createElement("td");
            summaryCell.textContent= course.courseSummary;

    
            row.appendChild(titleCell);
            row.appendChild(typeCell);
            row.appendChild(summaryCell);

            courseTableBody.appendChild(row);
        });


    } catch (error) {
        console.error("Error fetching data from the API:", error);
    }
})();

