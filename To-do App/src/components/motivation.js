import React from 'react';

import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.min.css'
import '../styles/styles.css'
import { SpinnerRoundOutlined } from 'spinners-react';
import { fetchMotivation } from '../store/actions/motivationActions';
import * as actionCreators from '../store/actions/motivationActions';
import { connect } from 'react-redux';
class Motivation extends React.Component {




    componentDidMount() {
        this.props.onFetch();

    }
    render() {

        if (!this.props.motivation && !this.props.error) {
            return (
                <div className="app">
                    <div className="s"><SpinnerRoundOutlined color="#38ad48" size={50} speed={100} thickness={100} /></div></div>)
        }
       
        return (
            <div className="app">
                <div className="card motivationcard">
                    <div className="card-body">
                        <div className="advice text-center">
                            <p className="ad">
                                {this.props.error ? (
                                    <div className="text-center"><span className="text text-danger ">{this.props.error}</span></div>
                                ) : (<p>{this.props.motivation}</p>) }
                               
                            </p>
                        </div>
                    </div>

                    <button className="btn bt btn-sm btn-outline-secondary" onClick={this.props.onFetch}>
                        Refresh
            </button>


                </div>
            </div>


        )
    }
}

const mapStateToProps = state => {
    return {
        motivation: state.mr.motivation,
        error: state.mr.error
    }
}
const mapDispatchToProps = dispatch => {
    return {
        onFetch: () => { dispatch(actionCreators.fetchMotivationASYNC()) }
    }
}


export default connect(mapStateToProps, mapDispatchToProps)(Motivation);
