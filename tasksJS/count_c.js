// Count a spicific letter in a givven word
function counK(letter, word) {
  const myArr = [];

  for (let i = 0; i < word.length; i++) {
    if (word[i].toLowerCase() === letter.toLowerCase()) {
      myArr.push(word[i])
    }
  }

  return `${word} has ${myArr.length}-${letter}`
}


// Create a polindrom for a given word

function polindromIs(word) {
  return word.split('').reverse().join('');
}


// Detect a duplicate number in array; an object will help to detect only only one duplicate num in an array
// Return a new array with all detected duplicated numbers in the array

myFunc = (array) => {
  let myArray = []
  const obj = {};
  for (let i = 0; i < array.length; i++) {
    if (!obj[array[i]]) {
      obj[array[i]] = 1;
    } else {
      myArray.push(array[i]);
    }
  }
  return myArray.sort();
}




