import React, { Component } from "react";
import * as actionCreators from '../store/actions/actions';
import {connect} from 'react-redux';

 class TodoItem extends Component {
     constructor(props){
         super(props);
     }

     
  render() {
  
    return (
      <li className="list-group-item text-capitalize d-flex justify-content-between my-2" style={{border:"1px solid grey"}}>
        <h6>{this.props.title}</h6>
        <div className="todo-icon">
          <span className="mx-2 text-success" >
            <i className="fas fa-pen" onClick={()=>this.props.onEdit(this.props.id,this.props.title)}/>
          </span>
          <span className="mx-2 text-danger" >
            <i className="fas fa-trash" onClick={()=>this.props.onDelete(this.props.id)} />
          </span>
        </div>
      </li>
    );
  }
}
const mapDispatchToProps=dispatch=>{
    return{
        onEdit:(id,title)=>dispatch(actionCreators.editTodo(id,title)),
        onDelete:(id)=>dispatch(actionCreators.deleteTodo(id)),
    }
}
export default connect(null,mapDispatchToProps)(TodoItem);