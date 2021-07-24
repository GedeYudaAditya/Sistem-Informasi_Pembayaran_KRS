const getMisi = document.querySelector("#get-misi"),
    showMisi = document.querySelector("#show-misi"),
    allMisi = getMisi.querySelectorAll("li");

allMisi.forEach((m, i) => {
    showMisi.innerHTML +=
        `<li class="single-service media py-2">
        <div class="service-icon pr-4">
          <span class="font-weight-bold">${i +1}</span>
        </div>
        <div class="service-text media-body">
          <p>
            ${m.innerHTML}
          </p>
        </div>
      </li>`
});