import React from 'react';
import ReactDOM from 'react-dom';
import * as serviceWorker from './serviceWorker';

import TodoApp from './components/TodoApp';
import { createStore, combineReducers, applyMiddleware } from 'redux';
import {Provider} from 'react-redux';
import todoReducer from './store/reducers/todoReducer';
import motivationReducer from './store/reducers/motivationReducer'
import Motivation from './components/motivation';
import thunk from 'redux-thunk'; 

function saveToLocalStorage(state){
try{
  const serializedState=JSON.stringify(state);
  localStorage.setItem('state',serializedState);

}catch(e)
{
  console.log(e);
}
}

function loadStateFromLocalStorage(){
  try{
    const serializedState=localStorage.getItem('state');
if(serializedState===null) return undefined;
return JSON.parse(serializedState);
  }
  catch(e){
    console.log(e);
    return undefined;
  }
}

const rootReducer=combineReducers({
  tdr:todoReducer,
  mr:motivationReducer
});

const persistedState=loadStateFromLocalStorage();

const store=createStore(
  rootReducer,
  persistedState,
    applyMiddleware(thunk));

store.subscribe(()=>saveToLocalStorage(store.getState()))

ReactDOM.render(
  <React.StrictMode>
   <Provider store={store}> <TodoApp /></Provider>
  </React.StrictMode>,
  document.getElementById('root')
);
// ReactDOM.render(
//   <React.StrictMode>
//    <Motivation />
//   </React.StrictMode>,
//   document.getElementById('root')
// );

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
serviceWorker.unregister();
