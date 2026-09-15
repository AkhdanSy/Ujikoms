  const selectKategori = document.getElementById('kategori');
    const wrapperLainnya = document.getElementById('wrapper-kategori-lainnya');
    const inputLainnya = document.getElementById('kategori_lainnya');

    selectKategori.addEventListener('change', function() {
        if (this.value === 'Lainnya') {
            wrapperLainnya.style.display = 'block';
            inputLainnya.setAttribute('required', 'required');
        } else {
            wrapperLainnya.style.display = 'none';
            inputLainnya.removeAttribute('required');
            inputLainnya.value = '';
        }
    });

    const gambarInput = document.getElementById('gambar-input');
    const imagePreview = document.getElementById('image-preview');
    const uploadTitleText = document.getElementById('upload-title-text');

    gambarInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                uploadTitleText.innerText = file.name;
            }
            reader.readAsDataURL(file);
        }
    });