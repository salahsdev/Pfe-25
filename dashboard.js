function removeCity(cityName) {
  if (confirm("Are you sure you want to remove " + cityName + " from your saved cities?")) {
    fetch("save_city.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "action=remove&city_name=" + encodeURIComponent(cityName),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          location.reload()
        } else {
          alert("Error removing city: " + data.message)
        }
      })
      .catch((error) => {
        console.error("Error:", error)
        alert("An error occurred while removing the city.")
      })
  }
}
