(function(exports) {

  var blank = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNgYAAAAAMAASsJTYQAAAAASUVORK5CYII=';

  exports.pngcrushChangeFile = function (input) {
    if (input && input.files && input.files.length) {
      var inputFile   = input.files[0];
      var inputSize   = document.getElementById('input-size');
      var inputImage  = document.getElementById('input-image');
      var outputText  = document.getElementById('output-text');
      var outputFile;
      var outputSize  = document.getElementById('output-size');
      var outputImage = document.getElementById('output-image');
      var outputLink  = document.getElementById('output-link');

      var instance = new pngcrush();

      // Display file size and input image
      inputSize.innerHTML = 'size: ' + inputFile.size;
      inputImage.src = blank;
      instance.readAsDataURL(inputFile).then(function (event) {
        inputImage.src = event.target.result;
      });

      // Clear the output
      outputText.innerHTML = '';
      outputImage.src = blank;
      outputSize.innerHTML = '';
      outputLink.style.display = 'none';
      outputLink.href = blank;

      // Execute pngcrush: pngcrush.exec(file, notify) -> Promise
      instance.exec(inputFile, function (event) {
        outputText.innerHTML += event.data.line + '\n';
      }).then(function (event) {
        // Done processing the image, display file size and output image
        outputFile = new Blob([event.data.data], { type: 'image/png' });
        var percentage = (((inputFile.size - outputFile.size) / inputFile.size) * 100);
        percentage = Math.round(percentage * 100) / 100;
        outputSize.innerHTML = 'size: ' + outputFile.size + ' (' + percentage  + '%)';
        outputImage.src = URL.createObjectURL(outputFile);
        outputLink.href = outputImage.src;
        outputLink.download = 'output.png';
        outputLink.style.display = 'block';
      });
    }
  };

})(this);
