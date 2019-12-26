#ifndef CHAT_MESSAGE_H_INCLUDED
#define CHAT_MESSAGE_H_INCLUDED
#include <list>
#include <stdio.h>
#include <cstddef>

using namespace std;

class chat_message
{
public:
    enum {header_length = 4};
    enum { max_body_length = 512 };

    chat_message():body_length_(0);
    const char* data() const;
    char *data();
    size_t length() const;
    const char* body() const;
    char* body();
    size_t body_length(std::size_t new_length) const;

    void body_length(std::size_t new_lenght);
    bool decode_header();
    void encode_header();

private:
    char data_[header_length + max_body_length];
    std::size_t body_length_;
};

#endif // CHAT_MESSAGE_H_INCLUDED
