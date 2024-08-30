import './Name.css'

function Name({fullname}){

    return (
    <div>
        <h1><span className='text-pink'>{fullname}</span></h1>
    </div>
    )
}
export default Name;