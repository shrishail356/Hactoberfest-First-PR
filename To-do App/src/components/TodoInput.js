import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import * as actionTypes from '../store/actions/actions';
import { connect } from 'react-redux';


class TodoInput extends Component {


    handleAdd = (event) => {
        event.preventDefault();
        this.props.onAdd(this.props.title)
    }

    render() {
        return (
            <div className="card card-body  " style={{border:"1px solid grey"}}>

                <form >
                    <div className="input-group">
                        <div className="input-group-prepend">
                            <div className="input-group-text bg-primary text-white">
                                <i className="fas fa-book" />

                            </div>
                        </div>
                        <input
                            type="text"
                            className="form-control text-capitalize"
                            placeholder="add a todo item"
                            value={this.props.title}
                            onChange={this.props.onHandleChange}
                            maxLength="22"
                        />
                    </div>
                    <button
                        type="submit"

                        className={
                            this.props.edit
                                ? "btn btn-block btn-success mt-3"
                                : "btn btn-block btn-primary mt-3"
                        }
                        onClick={this.handleAdd}
                        disabled={!this.props.title}
                      
                    >
                        {this.props.edit ? "edit item" : "add item"}
                    </button>


                </form>


            </div>
        )
    }
}
const mapStateToProps = state => {
    return {
        title: state.tdr.title,
        edit: state.tdr.edit
    }
}
const mapDispatchToProps = dispatch => {
    return {
        onAdd: (todo) => { dispatch(actionTypes.addTodo(todo)) },
        onHandleChange: (event) => { dispatch(actionTypes.handleInputChange(event)) }
    }
}
export default connect(mapStateToProps, mapDispatchToProps)(TodoInput);