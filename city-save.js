function saveCity(cityName, cityPage) {
  fetch("save_city.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: "action=save&city_name=" + encodeURIComponent(cityName) + "&city_page=" + encodeURIComponent(cityPage),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        alert("City saved to your dashboard!")

        // uupdate button text
        const button = event.target
        button.textContent = "Saved!"
        button.disabled = true
        button.style.background = "#28a745"
      } else {
        alert(data.message)
      }
    })
    .catch((error) => {
      console.error("Error:", error)
      alert("An error occurred while saving the city.")
    })
}
