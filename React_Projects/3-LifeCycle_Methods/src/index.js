import React ,{Component }from 'react';
import ReactDOM from 'react-dom';
import SeasonDisplay from './SeasonDisplay';
import Loader from './loader';



class App extends Component {
    // constructor(props) {
    //     super(props);
    //     this.state = { lat: null, errorMessage: '' };
    // };

    // Refractoring 
    state = { lat: null, errorMessage: '' };

    componentDidMount() {
        window.navigator.geolocation.getCurrentPosition( // Mozilla fetching position data
            position => { //callback function to fetch current user's position
                // Calling setState to actualise lat state after fetching 
                this.setState({ lat: position.coords.latitude }); 

            },
            err => {
                console.log(err);
                this.setState({ errorMessage: err.message });
            } //err callback 
        );
    }
    componentDidUpdate() {
        
        console.log('Didupdaaate');
    }

    displayedContent () {
        if (this.state.errorMessage && !this.state.lat) {
            return <div>Error: {this.state.errorMessage}</div>;
        }

        if (!this.state.errorMessage && this.state.lat) {
            return <SeasonDisplay lat={this.state.lat} />
        }

        return <div><Loader message="Please accept location request" /></div>;
    }

    render () {
        return (
            <div className="border red">
                {this.displayedContent()}
            </div>
        )
    }
}

ReactDOM.render(
    <App />,
    document.querySelector('#root')
);
