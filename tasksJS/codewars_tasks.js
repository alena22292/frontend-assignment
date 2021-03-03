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













