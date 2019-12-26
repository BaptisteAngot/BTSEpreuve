#ifndef CHAT_SESSION_H_INCLUDED
#define CHAT_SESSION_H_INCLUDED
#include <deque>
#include "chat_room.h"
#include "chat_message.h"

typedef std::deque<chat_message> chat_message_queue;


class chat_session : public chat_participant, public std::enable_shared_from_this<chat_session>
{
public:
    chat_session(boost::asio::ip::tcp::socket socket, chat_room& room) : socket_(std::move(socket)),,room_(room){}
    void start();
    void deliver(const chat_message& msg);

private:
    void do_read_header();
    void do_read_body();
    void do_write();

  boost::asio::ip::tcp::socket socket_;
  //chat_room& room_;
  //chat_message read_msg_;
  //chat_message_queue write_msgs_;
};

#endif // CHAT_SESSION_H_INCLUDED
