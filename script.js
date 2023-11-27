var compteurInputs = 1;
var canvasArray = [];

document.getElementById("ajouInput").addEventListener("click", function() {
  var nouvelInputs3 = document.createElement("p");
  nouvelInputs3.textContent = "Partenaire " + compteurInputs + ":";

  var nouvelInput = document.createElement("input");
  nouvelInput.type = "text";
  nouvelInput.name = "nouvelInput" + compteurInputs;
  nouvelInput.placeholder = "Partenairee " + compteurInputs;

  var nouvelInputs = document.createElement("input");
  nouvelInputs.type = "text";
  nouvelInputs.name = "contribPart" + compteurInputs;
  nouvelInputs.placeholder = "Contribution du Partenaire " + compteurInputs;

  var nouvelInputs2 = document.createElement("input");
  nouvelInputs2.type = "text";
  nouvelInputs2.name = "profit" + compteurInputs;
  nouvelInputs2.placeholder = "Profit du Partenaire " + compteurInputs;

  var canvas = document.createElement("canvas");
  canvas.id = "signature-pad-" + compteurInputs; // Unique ID for each canvas
  canvas.width = "400";
  canvas.height = "200";
 

  document.getElementById("conteneurInputs").appendChild(nouvelInputs3);
  document.getElementById("conteneurInputs").appendChild(nouvelInput);
  document.getElementById("conteneurInputs").appendChild(nouvelInputs);
  document.getElementById("conteneurInputs").appendChild(nouvelInputs2);
  document.getElementById("conteneurInputs").appendChild(canvas);

  var signaturePad = new SignaturePad(canvas);

  canvasArray.push(canvas);

  compteurInputs++;
});



document.getElementById("resetCanvas").addEventListener("click", function() {
  if (canvasArray.length > 0) {
    var lastCanvas = canvasArray.pop();

    var parentContainer = lastCanvas.parentNode;

    lastCanvas.parentNode.removeChild(lastCanvas);

    var newCanvas = document.createElement("canvas");
    newCanvas.id = lastCanvas.id;
    newCanvas.width = "400";
    newCanvas.height = "200";

    
    parentContainer.appendChild(newCanvas);
    canvasArray.push(newCanvas);
    
    var signaturePad = new SignaturePad(newCanvas);
  } else {
    console.log("Aucun canvas à réinitialiser.");
  }
});


document.getElementById('generatePdf').addEventListener('click', function() {
    fetch('generate_pdf.php')
      .then(response => response.blob())
      .then(blob => {
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'ok.pdf';
        document.body.appendChild(a);
        a.click();
        window.URL.revokeObjectURL(url);
      });
});

document.getElementById('genpdf').addEventListener('click', function() {
  fetch('generate_pdf.php')
    .then(response => response.blob())
    .then(blob => {
      const url = window.URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'azi.pdf';
      document.body.appendChild(a);
      a.click();
      window.URL.revokeObjectURL(url);
    });
});
