// 1) return a number(count) of wovels in a string

function getCount(str) {
  return (str.match(/[aeiou]/ig)||[]).length;
}

// *******************************

// 2) Anagrams(word, array of words)

function anagrams(word, words) {
  let resultArray = [];
  const sortedWord = word.split('').sort().join('');

  for (let i = 0; i < words.length; i++){
    if (words[i].split('').sort().join('') === sortedWord) {
      resultArray.push(words[i]);
    }
  }
  return resultArray;
}
// *******************************

// 3) Find the difference between two arrays:

function arrayDiff(a, b) {
  return a.filter(n => !b.includes(n));
}

// arrayDiff([-5,-13,15,13,5,6,-3,-18,-1,6],[-1,5,13]);

// *******************************

// Check the two strings if they have a common letter(s)
// 4) Find the similar letters between two strings:

function twoStrings(s1, s2) {
  let common = s1.split('').filter(l => s2.split('').includes(l));
  if (common.length >= 1) {
      return 'YES';
  } else {
     return 'NO';
  }
}

// *******************************

// 5) Snail
snail = function(array) {
  if (array.length < 2) {
    return array[0] || [];
  }
  let result = [];
  // add the first sub-array into a result array:
  result.push(...array.shift());
  // add the last items of the midlle sub-arrays:
  for(let i=0; i < array.length-1; i++) {
    result.push(array[i].pop());
  }
  // reverse the last sub-array(array.pop or in some case it could be []) one:
  result.push(...array.pop().reverse());
  //
  for(let j=array.length-1; j >= 0; j--) {
    result.push(array[j].shift());
  }
  //the recursive function strips the outer edges off the input array,
  // spreads them into the output, and then spreads the result of being run
  // on the remaining input into the output. Each run of the function
  // (until it hits a base case) is analogous to a pass of the while loop
  // in the iterative solution.
  result.push(...snail(array))
  return result;
}
// output =>
array = [[1,2,3],
         [4,5,6],
         [7,8,9]]
snail(array) #=> [1,2,3,6,9,8,7,4,5]

// 6) The rgb function is incomplete.
// Complete it so that passing in RGB decimal values will result in a hexadecimal representation being returned. Valid decimal values for RGB are 0 - 255. Any values that fall out of that range must be rounded to the closest valid value.

Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.

function rgb(r, g, b){
  return [r, g, b].map(x => {
    if (x > 255) {
      x = 255;
    }
    if (x < 0) {
      x = 0;
    }
    let hex = x.toString(16);
    return hex.length === 1 ? '0' + hex : hex;
  }).join('').toUpperCase();
}

// => rgb(300,255,255), 'FFFFFF'

// 7) In this exercise, you have to analyze records of temperature to find the closest to zero.

function computeClosestToZero(ts) {
    if (ts.length < 1) {
      return 0;
    }
    let minus = ts.filter(m => m < 0).sort((a,b) => b - a);
    let plus = ts.filter(p => p >= 0).sort((a,b) => a - b);
    // condition if there is only array of positive numbers:
    if (minus.length === 0){
      return plus[0];
    } else if (plus.length === 0){
      return minus[0]
    } else {
        if (Math.abs(minus[0]) >=  Math.abs(plus[0])) {
        return plus[0];
      } else {
        return minus[0];
      }
    }

}

// 8) How to chech if it is an array or other type of object:
  const arrayList = ['Hello', 'Alena'];
  const object = {name: 'Alena', surname: 'Gritsiuk'};

  if(Object.prototype.toString.call(arrayList) === '[object Array]') {
    console.log('Array!');
  }
  if(Object.prototype.toString.call(arrayList) === '[object Object]') {
    console.log('Object!');
  }

  // if use 'typeof' arrayList => 'object' as well as for {Object}

// 9) How would you use a closure to create a private counter?

function counter() {
  let accumulator = 0;
  return {
    add: function(num) { accumulator += num; },
    retrieve: function() { return 'The counter is currently at: ' + accumulator; }
  }
}

const myFunction = counter();
myFunction.add(34);
myFunction.add(67);
myFunction.retrieve();

// => "The counter is currently at: 101"

// 10)

var contacts = [
    {
        "firstName": "Akira",
        "lastName": "Laine",
        "number": "0543236543",
        "likes": ["Pizza", "Coding", "Brownie Points"]
    },
    {
        "firstName": "Harry",
        "lastName": "Potter",
        "number": "0994372684",
        "likes": ["Hogwarts", "Magic", "Hagrid"]
    },
    {
        "firstName": "Sherlock",
        "lastName": "Holmes",
        "number": "0487345643",
        "likes": ["Intriguing Cases", "Violin"]
    },
    {
        "firstName": "Kristian",
        "lastName": "Vos",
        "number": "unknown",
        "likes": ["JavaScript", "Gaming", "Foxes"]
    }
];


function lookUpProfile(name, prop){
for(let i =0; i < contacts.length; i++){
    if (contacts[i].firstName === name){
        if (contacts[i].hasOwnProperty(prop)){
            return contacts[i][prop];
        }else{
            return 'No such property';
        }
    }
}
return 'No such contact';

}

// => lookUpProfile("Akira", "likes");

// 11)
function permutations(string) {
  if (!string || typeof string !== 'string'){
    return 'Please enter the string';
  } else if (string.length < 2) {
    return [string];
  }

  let result = [];

  for (let i = 0; i < string.length; i++) {
    let char = string[i];
    // this condition allows you to avoid all repeats of the word,
    // alternatively you may use [...new Set(result)]
    if (string.indexOf(char) != i) {
      continue
    }
    let remainLetters = string.slice(0, i) + string.slice(i + 1, string.length);
    for (let perm of permutations(remainLetters)) {
      result.push(char + perm);
    }
  }
  // return only uniqe values of words:
  return result;
}

// 12
function sockMerchant(n, ar) {
  let obj = {};
  for(let i = 0; i < n; i++){
    if (obj[ar[i]]) {
      obj[ar[i]] += 1;
    } else {
      obj[ar[i]] = 1;
    }
  }

  // => {10: 4, 20: 3, 30: 1, 50: 1}
  let myArray = Object.entries(obj).filter(arr => arr[1] >= 2);
  let count = 0;

  for (let i = 0; i < myArray.length; i++){
    let item = myArray[i];
    count += Math.floor(item[1] / 2);
  }

  return count;
}

//13
function countingValleys(steps, path) {
    let valley = 0;
    let isItValley = false;

    path = path.split('').map(st => st === 'U' ? 1 : -1);
    let count = 0;
    for (let i in path) {
        count += path[i];
        if (count < 0 && !isItValley) {
           isItValley = true;
        }
        if (count == 0 && isItValley){
            valley++;
            isItValley = false;
        }
    }
    return valley;
}

// Example
// n = 8
// s = "UDDDUDUU"
// => 1

// 14) moves zeros to the end of the array.
var moveZeros = function (arr) {
  // TODO: Program me
  let zero = [];
  let rest = [];
  for (let item of arr) {
    item === 0 ? zero.push(item) : rest.push(item);
  }
  for (let z of zero) {
    rest.push(z);
  }
  return rest;
}

// => moveZeros([1,2,0,1,0,1,0,3,0,1] ==> [ 1, 2, 1, 1, 3, 1, 0, 0, 0, 0 ]

// 15) Complete the solution so that it strips all text that follows any of a set of comment markers passed in. Any whitespace at the end of the line should also be stripped out. Remove all charecters that unwanted in the given string:
function solution(input, markers) {
  // mapping array on each line =>
  return input.split('\n').map(line => markers.reduce((line, marker) => line.split(marker)[0].trim(), line)).join('\n');
};

function solution(input, markers)
{
  var lines = input.split("\n");
  for (var i = 0; i < lines.length; ++i)
    for (var j = 0; j < markers.length; ++j)
      lines[i] = lines[i].split(markers[j])[0].trim();
  return lines.join("\n");
}

// => solution("apples, pears # and bananas\ngrapes\nbananas !apples!, adrians ^ ", ["#", "!", "^"])

// output => "apples, pears
//           grapes
//           bananas"

// 16 Human readable time form

function formatDuration(seconds) {
  // Complete this function

  let dayInSec = 24 * 3600;

  let year = Math.floor(seconds/(dayInSec * 365));
  let day = Math.floor((seconds % (dayInSec * 365)) / dayInSec);
  let hour = Math.floor(((seconds % (dayInSec * 365)) % dayInSec) / 3600);
  let min = Math.floor((((seconds % (dayInSec * 365)) % dayInSec) % 3600) / 60);
  let sec = (((seconds % (dayInSec * 365)) % dayInSec) % 3600) % 60;

  secFunct = () => {
    return (sec ? (((seconds > 60) ? ' and ' + sec + ' second' : + sec + ' second') + (sec === 1 ? '' : 's')) : '');
  };

  minFunct = () => {
    if (sec === 0 && day !== 0) {
      return 'and ' + (min ? min + 'minute' + (min === 1 ? '' : 's') : '');
    }
    return (min ? min + ' minute' + (min === 1 ? '': 's') : '');
  };

  hoursFunct = () => {
    if (minFunct().charAt(0) === 'a') {
      return (hour ? hour + ' hour' + (hour === 1 ? ' ' : 's ') : '');
    }
    if (sec === 0 || min === 0) {
      return (hour ? hour + ' hour' + (hour === 1 ? '' : 's') : '');
    }
    return (hour ? hour + ' hour' + (hour === 1 ? ', ' : 's, ') : '');
  };

  daysFunct = () => {
    return (day ? day + ' day' + (day === 1 ? ', ' : 's, ') : '');
  };

  yearsFunct = () => {
    return (year ? year + ' year' + (year === 1 ? ', ' : 's, ') : '');
  }
  return yearsFunct() + daysFunct() + hoursFunct() + minFunct() + secFunct();
}

// 17 Repeated string, s = a fraction of an infinitive string, n = the size of the substring.
//   The task is to find how many times 'a' repeats in the substring.
function repeatedString(s, n) {
  // need to check up if the given string is a string:
  if (typeof s !== 'string' || s.length < 1) {
    return 'Please provide a string';
  }
  if (s.length < 2) {
    return n;
  };
  let str = '';
  // to make from a string an array of given number;
  for (let i = 0; i < n; i++) {
    str += s;
  }
  return str.split('').slice(0, n).filter(i => i === 'a').length;
}

repeatedString('aba', 10)

// Build a Calculator
const Calculator = function() {
  this.evaluate = string => {
    // rid of spaces between characters in the string;
    string = string.split(' ').join('');
    // need to check if there is '()', '/', '*' - the first math action
    if (string.length > 1) {
      while (string.includes('*')) {
        let num1 = Number(string[string.indexOf('*') - 2]);
        let num2 = Number(string[string.indexOf('*') + 2]);
        let result = num1 * num2;
        string = string.slice(0, string.indexOf('*') - 2) + result.toString() + string.slice(string.indexOf('*') + 3, string.length);
      }
      while (string.includes('/')) {
        let num1 = Number(string[string.indexOf('/') - 2]);
        let num2 = Number(string[string.indexOf('/') + 2]);
        let result = num1 / num2;
        string = string.slice(0, string.indexOf('/') - 2) + result.toString() + string.slice(string.indexOf('/') + 3, string.length);
      }
    }
    return string;
  }
};
// alternative:
const Calculator = function() {
  this.evaluate = string => {


  }
};
























