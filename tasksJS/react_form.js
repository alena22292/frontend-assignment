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
  }

  handleSubmit(e) {
    this.props.send(this.state);
    e.preventDefault();
  }

  render() {
    const {name, wish, priority} = this.state;
    return (
      <form onSubmit={this.handleSubmit}>
         <input value={name} id="name" type="text" placeholder="Your name" onChange={() => this.setState({name: e.target.value})} />
         <textarea value={wish} id="wish" placeholder="Describe your wish" onChange={() => this.setState({wish: e.target.value})} />
         <select value={priority} id="priority" onChange={() => this.setState({priority: e.target.value})}>
           <option selected value='1' />
           <option value='2' />
           <option value='3' />
           <option value='4' />
           <option value='5' />
         </select>
         <input type="submit" value="Submit" />
      </form>
    );
  }
};


// an input field for the child's name (with id 'name')
// a text area to describe the wish (id: 'wish')
// a drop-down indicating the priority of the wish, from 1 to 5 - default is 1 (id: 'priority')
// the keys in the state to store the corresponding values should be named the same as the element's id
// an onSubmit action calling the function handleSubmit
// it should be a controlled component (i.e. using onChange to bind input to the component's state)
