const textElement = document.getElementById("myText");
const maxWords = 2; // Jumlah kata maksimal yang ingin ditampilkan

function truncateText(element, maxWords) {
  const words = element.textContent.split(" ");
  if (words.length > maxWords) {
    element.textContent = words.slice(0, maxWords).join(" ") + "...";
  }
}

truncateText(textElement, maxWords);
