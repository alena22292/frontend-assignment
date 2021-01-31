// install node-fetch library
const fetch = require('node-fetch');

class DataService {
  constructor(url) {
    this.url = url;
  }

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

























