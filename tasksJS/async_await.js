// install node-fetch library
const fetch = require('node-fetch');

class DataService {
  constructor(url) {
    this.url = url;
  }
// The async keyword is added to functions to tell them to return a promise
//    (Promise.resolve()) rather than directly returning the value.
// The real advantage of async functions becomes apparent when it's combined
//    with the await keyword — in fact, await only works inside async functions.
//    This can be put in front of any async promise-based function to pause the code
//    on that line until the promise fulfills, then return the resulting value.
// Using 'await' when calling any function that returns a Promise, including web API functions

  async getUser(id) {
    try {
      let response = await fetch(`${this.url}/users/${id}`);
      let data = await response.json();

      return data;
    } catch(error) {
        throw new Error("Didn't receive data from a user")
    }
  }

  async getPost(userId) {
    try {
      let response = await fetch(`${this.url}/posts?userId=${userId}`);
      let data = response.json();

      return data;
    } catch(error) {
      throw new Error("Didn't resceive posts")
    }
  }

  async getComment(postId) {
    try {
      let response = await fetch(`${this.url}/comments?postId=${postId}`);
      let data = response.json();

      return data;
    } catch(error) {
      throw new Error("Didn't find post comments");
    }
  }
}

// IIFE - Immediately Invoked Function Expression that runs as soon as it is defined
(async () => {
  let dataService = new DataService('https://jsonplaceholder.typicode.com');

  try {
    let user = await dataService.getUser(1);
    let posts = await dataService.getPost(user.id);
    let comments = await dataService.getComment(posts[0].id);
    console.log(user);
  } catch(error) {
    console.log(error);
  }
})();

























