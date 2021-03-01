const React = require("react");

class WishlistForm extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      name: '',
      wish: '',
      priority: 1,
    }

    this.handleSubmit = this.handleSubmit.bind(this);
    this.handleChange = this.handleChange.bind(this);
  }

  handleSubmit = (e) => {
    alert('The wish was sent');
    e.preventDefault();
  }

  handleChange = (e) => {
    this.setState({
      priority: e.target.value,
    })
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
         <input id="name" type="text" placeholder="Your name" />
         <textarea id="wish" placeholder="Describe your wish" />
         <select value={this.state.priority} id="priority" onChange={this.handleChange}>
           <option value='1'>1</option>
           <option value='2'>2</option>
           <option value='3'>3</option>
           <option value='4'>4</option>
           <option value='5'>5</option>
         </select>
      </form>
    );
  }
};


// an input field for the child's name (with id 'name')
// a text area to describe the wish (id: 'wish')
// a drop-down indicating the priority of the wish, from 1 to 5 - default is 1 (id: 'priority')
// the keys in the state to store the corresponding values should be named the same as the element's id
