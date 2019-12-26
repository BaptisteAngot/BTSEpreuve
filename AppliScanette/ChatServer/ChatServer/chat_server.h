#ifndef CHAT_SERVER_H_INCLUDED
#define CHAT_SERVER_H_INCLUDED
#include <boost/asio.hpp>
#include "chat_room.h"

class chat_server
{
public:
  chat_server(boost::asio::io_service& io_service,
      const boost::asio::ip::tcp::endpoint& endpoint)
    : acceptor_(io_service, endpoint),
      socket_(io_service)
    {
    do_accept();
    }

private:
    void do_accept();
    boost::asio::ip::tcp::acceptor acceptor_;
    boost::asio::ip::tcp::socket socket_;
    chat_room room_;
};

#endif // CHAT_SERVER_H_INCLUDED
