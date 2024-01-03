(async () => {
    try {
        const response = await fetch("api/allData.php");
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();
		
		console.dir(data);

    } catch (error) {
        console.error("Error fetching data from the API:", error);
    }
})();