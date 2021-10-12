import React, { useState, useContext } from 'react'
import { GlobalContext } from '../context/GlobalState'


const AddTransaction = () => {
  const [text, setText] = useState('')
  const [amount, setAmount] = useState(0)
  const { addTransaction } = useContext(GlobalContext);

  const addTransactionHandler = (event) => {
    event.preventDefault();
    addTransaction({ text: text, amount: + amount }) 
  }

  return (
    <div>
      <h3>Add new transaction</h3>
      <form >
        <div className="form-control">
          <label htmlFor="text">Text</label>
          <input type="text" value={text} onChange={(event) => { setText(event.target.value) }} placeholder="Enter text..." />
        </div>
        <div className="form-control">
          <label htmlFor="amount"
          >Amount <br />
            (negative - expense, positive - income)</label
          >
          <input type="number" value={amount} onChange={(event) => { setAmount(event.target.value) }} placeholder="Enter amount..." />
        </div>
        <button className="btn" onClick={addTransactionHandler}>Add transaction</button>
      </form>
    </div>
  )
}

export default AddTransaction
