const React = require("react");

class WishlistForm extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return (
      <form >
         <input id="name" type="text" placeholder="Your name" />
         <textarea id="wish" placeholder="Describe your wish" />
      </form>
    );
  }
};
