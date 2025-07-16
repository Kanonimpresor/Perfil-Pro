document.addEventListener("DOMContentLoaded", () => {
  const skillBars = document.querySelectorAll(".progress-bar");
  skillBars.forEach(bar => {
    const width = bar.classList.contains("w-80") ? "80%" :
                  bar.classList.contains("w-70") ? "70%" : "50%";
    bar.style.width = width;
  });
});
