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

