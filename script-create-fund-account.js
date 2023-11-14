accountId='0.0.5817238';
accountKey='3030020100300706052b8104000a04220420472d9860caa596af425f594cd834f295d7f91192454052d611d4fe83df037b94'
const client = Client.forTestnet().setOperator(accountId, accountKey);
const accountBalance = await new AccountBalanceQuery()
const accountBalanceHbars = accountBalance.hbars.toBigNumber();