import React, { useContext } from 'react';
import { GlobalContext } from '../context/GlobalState'


const Balance = () => {

    const context = useContext(GlobalContext);

    const balance = context.transactions.map(t => { return t.amount })
    // reduce() method is used to reduce an array to single value. It takes 2 arguments 1. callback function 2. default value for accumulator
    const totalBalance = balance.reduce((accumulator, value) => { return accumulator + value }, 0).toFixed(2) //accumulator starts from 0 so one more step
    //const totalBalance = balance.reduce((accumulator,element) =>accumulator + element).toFixed(2);
    return (
        <div>
            <h4>Your Balance</h4>
            <h1>$ {totalBalance}</h1>
        </div>
    )
}

export default Balance
