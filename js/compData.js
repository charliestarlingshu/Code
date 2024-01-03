(async () => {
    try {
        const response = await fetch("api/computingData.php");
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();
        

        const courseList = document.getElementById("courses");


        data.forEach(course => {
            const courseDiv = document.createElement("div");
            if (course.ucasCode===null){
                course.ucasCode='';
            }
            courseDiv.innerHTML = `
                <h3>${course.courseTitle}</h3>
                <h4>Description:</h4>
                <p id="description">${course.courseSummary}</p>
                <div id="courseDetails">
                    <p>${course.courseAwardName}</p>
                    <p>${course.ucasCode}</p>
                    <p>${course.studyLength}</p>
                </div>
            `;
            courseList.appendChild(courseDiv);
            courseDiv.setAttribute('class','courseBlock');

        });       

    } catch (error) {
        console.error("Error fetching latest films from the API:", error);
    }
})();
