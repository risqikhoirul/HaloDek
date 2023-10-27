function interpretBMI(bmi) {
  let interpretation;

  if (bmi < 18.5) {
    interpretation = `
      <div class="alert alert-warning" role="alert">
        Kekurangan Berat Badan
      </div>`;
  } else if (bmi >= 18.5 && bmi <= 24.9) {
    interpretation = `
      <div class="alert alert-success" role="alert">
        Berat Badan Normal
      </div>`;
  } else if (bmi >= 25) {
    interpretation = `
      <div class="alert alert-danger" role="alert">
        Kelebihan Berat Badan
      </div>`;
  }

  return interpretation;
}
function calculateBMI() {
  const weight = parseFloat(document.getElementById("weight").value);
  const height = parseFloat(document.getElementById("height").value);

  if (!isNaN(weight) && !isNaN(height) && height > 0) {
    let bmi = (weight / (height / 100) ** 2).toFixed(2);
    document.getElementById("result").innerText = bmi;
    document.getElementById("interpretation").innerHTML = interpretBMI(bmi);
  } else {
    document.getElementById("result").innerText = "-";
    document.getElementById("interpretation").innerHTML = "";
  }
}

document.getElementById("weight").addEventListener("input", calculateBMI);
document.getElementById("height").addEventListener("input", calculateBMI);
