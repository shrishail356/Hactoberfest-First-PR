import axios from 'axios';


export const FETCH_MOTIVATION="FETCH_MOTIVATION";
export const FETCH_MOTIVATION_ERROR="FETCH_MOTIVATION_ERROR"

export const fetchMotivation=(motivation)=>{
    return{
        type:FETCH_MOTIVATION,
        motivation:motivation

    }
}
export const fetchMotivationError=()=>{
    return{
        type:FETCH_MOTIVATION_ERROR,
        error:"an error occured"

    }
}

export const fetchMotivationASYNC=()=>{
return dispatch=>{
    axios.get("https://api.quotable.io/random").
    then(response => {
     
        dispatch(fetchMotivation(response.data.content))
      })
      
      .catch(error => {
       dispatch(fetchMotivationError())

      }
    )
    }
}