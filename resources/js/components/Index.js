import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios'

export default class MainReactComponent extends Component {
    constructor(props){
        super(props)
        this.state = {
            listeSorties: []
        }
    }

    async componentDidMount() {
        console.log('there')
        const res = await axios.get('/testadmin')
        // const data = await res.json()
        console.log('here', res.data)
    }

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Example Component</div>

                            <div className="card-body">I'm an example component!</div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('mainReactComponent')) {
    ReactDOM.render(<MainReactComponent />, document.getElementById('mainReactComponent'));
}

