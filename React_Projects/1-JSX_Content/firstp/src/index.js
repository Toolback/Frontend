// Import the React and ReactDOM libraries
import React from 'react';
import ReactDOM from 'react-dom';

// Create a React Component 
const App = () => {
    return <div>Hi There ! </div>;
}


// Take the React Component and Show it on the screen
ReactDOM.render(
  <React.StrictMode>
    <App />
    </React.StrictMode>,
    document.querySelector('#root')
);

