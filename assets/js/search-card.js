//get Element
const getAllCards = document.querySelectorAll(
    ".col-12.col-md-6.col-lg-4.res-margin.mb-4"
  ),
  buttonSearchCard = document.querySelector("#button-addon2"),
  searchCard = document.querySelector("#search-addon2");

buttonSearchCard.addEventListener("click", () => {
  startSearch();
});

//function search
const startSearch = () => {
  const value = searchCard.value;
  searchCard.value = "";
  getAllCards.forEach((card) => {
    const title = card.querySelector("h4").textContent.toUpperCase();

    //search condition
    if (title.search(value.toUpperCase()) != -1) {
      if (card.classList.contains("d-none")) {
        card.classList.remove("d-none");
      }
    } else {
      if (!card.classList.contains("d-none")) {
        card.classList.add("d-none");
      }
    }
  });
};
