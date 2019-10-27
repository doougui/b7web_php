const fs = require('fs');

fs.readFile('log.txt', (err, ret) => {
    let log = ret.toString();
    let lines = log.split('\n');

    for (let i in lines) {
        let pieces = lines[i].split(' ');

        console.log('------------------------');
        console.log(`DATE: ${pieces[0]}`);
        console.log(`TYPE: ${pieces[1]}`);
        console.log(`MESSAGE: ${pieces[2]}`);
    }
});