const mipInput = document.getElementById("mipInput");
const previewContainer = document.getElementById("myImagePreview");
const previewImage = previewContainer.querySelector(".mip-image");
const previewDefaultText = previewContainer.querySelector(".mip-default-text");

previewContainer.addEventListener("click", function() {
  console.log("Di klik");
  mipInput.click();
});

mipInput.addEventListener("change", function() {
  const file = this.files[0];
  console.log(file);
  
  if (file) {
    const reader = new FileReader();

    previewDefaultText.style.display = "none";
    previewImage.style.display = "block";

    reader.addEventListener("load", function() {
      console.log(this);
      previewImage.setAttribute("src", this.result);
    });

    reader.readAsDataURL(file);
  } else {
    previewDefaultText.style.display = null;
    previewImage.style.display = null;
    previewImage.setAttribute("src", "");
  }
});