// Fungsi untuk fetch data provinsi dan mengembalikan promise
function fetchProvinces() {
  return fetch("https://risqikhoirul.github.io/api-wilayah-indonesia/api/provinces.json")
    .then((response) => response.json())
    .catch((error) => {
      console.error("Error fetching provinces data:", error);
      throw error; // Rethrow the error to be caught by the calling function
    });
}

function fetchRegencies(provinceId) {
  return fetch(`https://risqikhoirul.github.io/api-wilayah-indonesia/api/regencies/${provinceId}.json`)
    .then((response) => response.json())
    .catch((error) => {
      console.error("Error fetching regencies data:", error);
      throw error; // Rethrow the error to be caught by the calling function
    });
}

function getHospital(idProv, idReg) {
  return fetch(`https://rs-bed-covid-api.vercel.app/api/get-hospitals?provinceid=${idProv}prop&cityid=${idReg}&type=2`)
    .then((response) => response.json())
    .then((data) => {
      let resulttxt = "";
      data.hospitals.forEach((hospital) => {
        resulttxt += `
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Tersedia!</h4>
                            <p>Nama: ${hospital.name}</p>
                            <p>Alamat: ${hospital.address}</p>
                            <p>Telphone: ${hospital.phone}</p>
                            <p>Tersedia Kamar: ${hospital.available_beds[0].available}</p>
                            <p>Kelas: ${hospital.available_beds[0].bed_class}</p>
                            <p>Nama Kamar: ${hospital.available_beds[0].room_name}</p>
                            <hr>
                            <p class="mb-0">Terakhir diperbarui: ${hospital.available_beds[0].info}</p>
                        </div>`;
      });
      return resulttxt;
    })
    .catch((error) => {
      console.error("Error fetching hospital data:", error);
      throw error; // Rethrow the error to be caught by the calling function
    });
}

function showResult() {
  var provinceSelect = document.getElementById("province");
  var regencySelect = document.getElementById("regency");
  var resultContainer = document.getElementById("resultContainer");

  var selectedProvinceId = parseInt(provinceSelect.value);
  var selectedRegencyId = parseInt(regencySelect.value);

  // Show loading spinner
  resultContainer.innerHTML = `<div class="spinner-border m-5 text-success" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>`;

  fetchProvinces()
    .then((provinceData) => {
      var selectedProvince = provinceData.find((province) => province.id === selectedProvinceId);

      return selectedProvinceId ? fetchRegencies(selectedProvinceId) : [];
    })
    .then((regencyData) => {
      regencyData.forEach((regency) => {
        var option = document.createElement("option");
        option.value = regency.id;
        option.text = regency.name;
        regencySelect.add(option);
      });

      return selectedRegencyId ? getHospital(selectedProvinceId, selectedRegencyId) : "";
    })
    .then((hospitalHTML) => {
      resultContainer.innerHTML = "";
      resultContainer.innerHTML = `<p>${hospitalHTML}</p>`;
    })
    .catch((error) => {
      console.error("Error fetching data:", error);
    });
}

function loadRegencies() {
  var provinceSelect = document.getElementById("province");
  var regencySelect = document.getElementById("regency");
  var selectedProvinceId = parseInt(provinceSelect.value);
  regencySelect.innerHTML = '<option selected disabled value="">Pilih Kabupaten/Kota</option>';
  if (selectedProvinceId) {
    fetchRegencies(selectedProvinceId)
      .then((regencyData) => {
        regencyData.forEach((regency) => {
          var option = document.createElement("option");
          option.value = regency.id;
          option.text = regency.name;
          regencySelect.add(option);
        });

        showResult();
      })
      .catch((error) => {
        console.error("Error fetching regency data:", error);
      });
  } else {
    showResult();
  }
}

document.addEventListener("DOMContentLoaded", function () {
  fetchProvinces()
    .then((data) => {
      var provinceSelect = document.getElementById("province");
      data.forEach((province) => {
        var option = document.createElement("option");
        option.value = province.id;
        option.text = province.name;
        provinceSelect.add(option);
      });

      loadRegencies();
    })
    .catch((error) => {
      console.error("Error fetching data:", error);
    });
});
