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
function twoStrings(s1, s2) {
  let common = s1.split('').filter(l => s2.split('').includes(l));
  if (common.length >= 1) {
      return 'YES';
  } else {
     return 'NO';
  }
}















