import * as actionTypes from '../actions/actions';

const initialState = {
    title:"",
    todo: [],
    edit:false
}

const todoReducer = (state = initialState, action) => {
    switch (action.type) {
        case actionTypes.ADD_TODO:
            
            return {
                ...state,
                todo:state.todo.concat({id:new Date() , title: action.value}),
                edit:false

            }

        case actionTypes.DELETE_TODO:
            return {
                ...state,
                todo: state.todo.filter(res=> res.id!= action.id)
            }
        case actionTypes.EDIT_TODO:
            return {
                ...state,
                todo: state.todo.filter(res=> res.id!= action.id),
                title: action.title,
                edit:true

            }
            case actionTypes.CLEAR_ALL:
                return{
                    ...state,
                    todo:[]
                }
            case actionTypes.HANDLE_INPUT_CHANGE:
                return{
                    ...state,
                    title:action.title
                }
        default:
            return state

    }
}
export default todoReducer;