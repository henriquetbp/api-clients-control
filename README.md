
# Sistema de Controle de Clientes

API REST para controle de clientes desenvolvido em PHP utilizando framework Laravel e banco de dados MySQL.

### Instalação

Clone este repositório e execute o comando `docker-compose up`.



## Documentação da API

ENDPOINT `/api/cliente`

| Método   | Descrição    |
| ----------  |---------------------------------- |
| `POST` | Cadastro de um novo cliente. |

ENDPOINT `/api/cliente/{id}`

| Método   | Descrição    |
| --------|---------------------------------- |
| `PUT` | Edição de um cliente já existente. |

ENDPOINT `/api/cliente/{id}`

| Método   | Descrição    |
| ----------|---------------------------------- |
| `DELETE` | Remoção de um cliente existente. |

ENDPOINT `/api/cliente/{id}`

| Método   | Descrição    |
| ------  |---------------------------------- |
| `GET` | Consulta de dados de um cliente |

ENDPOINT `/api/consulta/final-placa/{numero}`

| Método   | Descrição    |
| :--------|---------------------------------- |
| `GET` | Consulta de todos os clientes cadastrados na base, onde o último número da placa do carro é igual ao informado. |
