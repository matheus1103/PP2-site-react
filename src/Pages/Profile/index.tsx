import { Job_box } from '../../Components/Job-box'
import './style.css'

export function Profile(){
     const objeto_teste = [{
        title: 'Vaga 1',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        }]
     },{
        title: 'Vaga 2',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        }]
     },{
        title: 'Vaga 3',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        },{
            title: 'categoria 3',
            color: '#777BDC'
        }]
     }]

    return (

        <div className='profile-container'>
            <div className='body-profile-container'>
                <div>
                    <h1 className='title'>Perfil</h1>
                </div>

                <div className='job-container'>
                    <div className='subtitle'>
                        <h3>Vagas candidatadas:</h3>
                    </div>
                    {objeto_teste.map(item=>(
                        <Job_box title={item.title} categories={item.categories} />
                    ))}
                </div>
            </div>
        </div>
    )
}

