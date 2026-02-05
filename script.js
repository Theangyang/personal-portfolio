function addRecommendation() {
  const input = document.getElementById("recInput");
  const container = document.querySelector(".recommendations-container");

  if (input.value.trim() !== "") {
    const card = document.createElement("div");
    card.className = "recommendation-card";
    card.innerHTML = `<p>${input.value}</p>`;
    container.appendChild(card);

    alert("Thank you for leaving a recommendation!");
    input.value = "";
  }
}
