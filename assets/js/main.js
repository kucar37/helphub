function toggleDropdown() {
  const menu = document.getElementById("userMenu");
  menu.classList.toggle("show");
}

document.addEventListener("DOMContentLoaded", function () {
  const filterBtns = document.querySelectorAll(".filter-btn");
  const cards = document.querySelectorAll(".request-card");

  if (filterBtns.length > 0) {
    filterBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        filterBtns.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");

        const filterValue = btn.getAttribute("data-filter");

        cards.forEach((card) => {
          const cardCategory = card.getAttribute("data-category");

          if (
            filterValue === "all" ||
            (cardCategory && cardCategory.includes(filterValue))
          ) {
            card.style.display = "block";
            card.style.animation = "none";
            card.offsetHeight;
            card.style.animation = "fadeIn 0.4s ease-out forwards";
          } else {
            card.style.display = "none";
          }
        });
      });
    });
  }

  window.addEventListener("click", function (e) {
    const menu = document.getElementById("userMenu");
    const trigger = document.querySelector(".profile-trigger");

    if (
      menu &&
      menu.classList.contains("show") &&
      !menu.contains(e.target) &&
      !trigger.contains(e.target)
    ) {
      menu.classList.remove("show");
    }
  });
});
