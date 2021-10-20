import * as actionTypes from '../actions/motivationActions'

const initialState={
    motivation:null,
    error:null
}

  const motivationReducer=(state=initialState,action)=>{
    switch(action.type){
        case actionTypes.FETCH_MOTIVATION:
        return{
            ...state,
            motivation : action.motivation
        }
        case actionTypes.FETCH_MOTIVATION_ERROR:
            return{
                ...state,
                error : action.error
                
            }
            default:
                return state
    }
}
export default motivationReducer;

