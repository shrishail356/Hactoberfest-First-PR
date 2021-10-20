

//action types
export const ADD_TODO="ADD_TODO";
export const DELETE_TODO="DELETE_TODO";
export const EDIT_TODO="EDIT_TODO";
export const CLEAR_ALL="CLEAR_ALL";
export const HANDLE_INPUT_CHANGE="HANDLE_INPUT_CHANGE"


//action creators
export const addTodo=(value)=>{
    return{
        type:ADD_TODO,
        value:value
    }
}
export const deleteTodo=(id)=>{
    return{
        type:DELETE_TODO,
        id:id
    }
}

export const editTodo=(id,title)=>{
    return{
        type:EDIT_TODO,
        id:id,
        title:title
    }
}
export const handleInputChange=(event)=>{
    return{
        type:HANDLE_INPUT_CHANGE,
        title:event.target.value
    }
}

export const clearAll=()=>{
    return{
        type:CLEAR_ALL
    }
}




