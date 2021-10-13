import React, { useContext } from 'react';
import { GlobalContext } from '../context/GlobalState'

const IncomeExpenses = () => {
    const { transactions } = useContext(GlobalContext);
    const amounts = transactions.map(t => t.amount);
    const totalAmount = amounts.reduce((accumulator, element) => Math.abs(accumulator) + Math.abs(element), 0).toFixed(2);
    const income = amounts
        .filter(a => a > 0)
        .reduce((accumulator, element) => accumulator + element, 0)
        .toFixed(2)
    const expense = (totalAmount - income).toFixed(2)
    return (
        <div className="inc-exp-container">
            <div>
                <h4>Income</h4>
                <p className="money plus">$ {income}</p>
            </div>
            <div>
                <h4>Expense</h4>
                <p className="money minus">$ {expense}</p>
            </div>
        </div>
    )
}

export default IncomeExpenses
