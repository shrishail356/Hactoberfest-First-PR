import React, { Component } from 'react';
import  'bootstrap/dist/css/bootstrap.min.css';
import TodoInput from './TodoInput';
import TodoList from './TodoList';
import TodoItem from './TodoItem';

export default class TodoApp extends Component {
    render() {
        return (
            <div>
                <div className="container">
                    <div className="row ">
                        <div className="col-10 mx-auto text-center col-md-8 mt-4">
                            <h3 className="text-capitalize text-center text text-primary">
                                todo app
                            </h3>
                            <TodoInput  />
                            <TodoList />
                           
                        </div>
                    </div>


                </div>
            </div>
        )
    }
}
