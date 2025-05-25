  const modal = document.getElementById("uploadModal");
    const uploadBtn = document.querySelector(".add-doc");
    uploadBtn.addEventListener("click", function () {
      modal.style.display = "flex";
    });
    function closeModal() {
      modal.style.display = "none";
    }
    window.addEventListener("click", function (e) {
      if (e.target === modal) {
        closeModal();
      }
    });

    // Simulasi upload file
    document.getElementById("uploadForm").addEventListener("submit", function(e) {
      e.preventDefault();
      const fileInput = document.getElementById("fileUpload");
      if (fileInput.files.length === 0) {
        alert("Silakan pilih file terlebih dahulu.");
      } else {
        alert("File " + fileInput.files[0].name + " siap diupload (fitur backend belum aktif).");
        closeModal();
        fileInput.value = "";
      }
    });