export default (state,action)=>{
    switch(action.type){
        case 'ADD':
            return{
                ...state,
                transactions:state.transactions.concat({ text:action.transaction.text,
                    id:new Date(),
                    amount:action.transaction.amount })
            }
        case 'DELETE':
            return{
                ...state,
             transactions: state.transactions.filter(t=>t.id!==action.id)
            }
        default:
            return state;
    }
}