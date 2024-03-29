var Module = {
  'noInitialRun' : true,
  'noFSInit' : true
};

importScripts('https://rawgit.com/richardassar/pngcrush.js/master/pngcrush.js');

var line = '';

Module.preRun = function() {
        FS.init(function() {
                return null;
        }, function(data) {
    if(data == 10) {
      postMessage({
        'type' : 'stdout',
        'line' : line
      });

      line = '';
    } else {
      line += String.fromCharCode(data);
    }
        });
};

function getFileData(fileName) {
  var data = FS.root.contents[fileName].contents;

        return new Uint8Array(data).buffer;
};

onmessage = function(event) {
  var message = event.data;

  switch(message.type) {
    case "file":
      FS.createDataFile('/', 'input.png', message.data, true, false);

      break;

    case "command":
      if(message.command == "go") {
        postMessage({'type' : 'start'});

        Module.run(['-reduce', '-rem', 'alla', '-rem', 'text', 'input.png', 'output.png']);

        postMessage({
          'type' : 'done',
          'data' : getFileData('output.png')
        });
      }

      break;
  };
};

postMessage({
  'type' : 'ready'
});